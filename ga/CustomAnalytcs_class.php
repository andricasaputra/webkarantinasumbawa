<?php

require_once 'google-api-php-client/src/Google/autoload.php';

class CustomAnalytcs_class {

    private $service_account_email = NULL;
    private $key_file_location = NULL;

    function __construct($serviceacc_email = NULL, $key_file_path = NUll) {
        if ($serviceacc_email == NULL || $serviceacc_email == '') {
            echo "Service Account Email Id Required";
            die();
        }
        if ($key_file_path == NULL || $key_file_path == '') {
            echo "Key file required";
            die();
        }
        $this->service_account_email = $serviceacc_email;
        $this->key_file_location = $key_file_path;
    }

    private function getService() {
        $client = new Google_Client();
        $client->setApplicationName("HelloAnalytics");
        $analytics = new Google_Service_Analytics($client);
        $key = file_get_contents($this->key_file_location);
        $cred = new Google_Auth_AssertionCredentials(
                $this->service_account_email, array(Google_Service_Analytics::ANALYTICS_READONLY), $key
        );
        $client->setAssertionCredentials($cred);
        if ($client->getAuth()->isAccessTokenExpired()) {
            $client->getAuth()->refreshTokenWithAssertion($cred);
        }
        return $analytics;
    }

    private function getFirstprofileId(&$analytics) {
        $accounts = $analytics->management_accounts->listManagementAccounts();
        if (count($accounts->getItems()) > 0) {
            $items = $accounts->getItems();

            $firstAccountId = $items[0]->getId();

            // Get the list of properties for the authorized user.
            $properties = $analytics->management_webproperties
                    ->listManagementWebproperties($firstAccountId);

            if (count($properties->getItems()) > 0) {
                $items = $properties->getItems();
                $firstPropertyId = $items[0]->getId();

                // Get the list of views (profiles) for the authorized user.
                $profiles = $analytics->management_profiles
                        ->listManagementProfiles($firstAccountId, $firstPropertyId);

                if (count($profiles->getItems()) > 0) {
                    $items = $profiles->getItems();

                    // Return the first view (profile) ID.
                    return $items[0]->getId();
                } else {
                    throw new Exception('No views (profiles) found for this user.');
                }
            } else {
                throw new Exception('No properties found for this user.');
            }
        } else {
            throw new Exception('No accounts found for this user.');
        }
    }


    public function getSessionData() {

        $analytics = $this->getService();
        $profileId = $this->getFirstProfileId($analytics);

        // Calls the Core Reporting API and queries for the number of sessions

        $data = $analytics->data_ga->get(
                'ga:' . $profileId, '2018-03-01', 'today', 'ga:sessions,ga:users,ga:newUsers,ga:bounceRate,ga:sessionDuration,ga:avgSessionDuration,ga:hits,ga:visits');
        $rowdata = $data->getRows();

        $data1 = $analytics->data_ga->get(
                'ga:' . $profileId, 'today', 'today', 'ga:sessions,ga:users,ga:newUsers,ga:bounceRate,ga:sessionDuration,ga:avgSessionDuration,ga:hits,ga:visits');
        $rowdata1 = $data1->getRows();

        $sessioncounts = array(
            'rows' => $rowdata['0'],
            'totalRows' => $data->getTotalResults(),
            'totalResults' => $data->getTotalsForAllResults(),
            'columnHeader' => $data->getColumnHeaders()
        );

        $sessioncountsperday = array(
            'rows' => $rowdata1['0'],
            'totalRows' => $data1->getTotalResults(),
            'totalResults' => $data1->getTotalsForAllResults(),
            'columnHeader' => $data1->getColumnHeaders()
        );

        return array('sessioncountstotal' => $sessioncounts, 'sessioncountperday' => $sessioncountsperday);
    }

}
