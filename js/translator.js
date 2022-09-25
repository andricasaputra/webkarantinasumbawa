function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: "id",
        includedLanguages: "en,es,id,pt,zh-CN,fr,ar,ru,ko,ja",
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
    }, "google_translate_element")
}

function changeLanguageByFlag(lang) {
    var frame = $('.goog-te-menu-frame:first');
    if (!frame.length) {
        alert("Error: Could not find Google translate frame.");
        return false;
    }
    frame.contents().find('.goog-te-menu2-item span.text').each(function() {
        if ($(this).html() == lang) {
            if (lang == 'Indonesian') $('#dLabel div.lang-dropdown-sm').html('<img src="assets/img/org/ID.png" alt="ID" class="img-responsive">');
            else if (lang == 'English') $('#dLabel div.lang-dropdown-sm').html('<img src="assets/img/org/flagsicon/uk-32.png" style="width: 70%" alt="EN" class="img-responsive">');
            else if (lang == 'Spanish') $('#dLabel div.lang-dropdown-sm').html('<img src="assets/img/org/flagsicon/spain-32.png" style="width: 70%" alt="SP" class="img-responsive">');
            else if (lang == 'Portuguese') $('#dLabel div.lang-dropdown-sm').html('<img src="assets/img/org/flagsicon/portugal-32.png" style="width: 70%" alt="PT" class="img-responsive">');
            else if (lang == 'Chinese (Simplified)') $('#dLabel div.lang-dropdown-sm').html('<img src="assets/img/org/flagsicon/china-32.png" style="width: 70%" alt="CH" class="img-responsive">');
            else if (lang == 'French') $('#dLabel div.lang-dropdown-sm').html('<img src="assets/img/org/flagsicon/france-32.png" style="width: 70%" alt="FR" class="img-responsive">');
            else if (lang == 'Japanese') $('#dLabel div.lang-dropdown-sm').html('<img src="assets/img/org/flagsicon/japan-32.png" style="width: 70%" alt="JP" class="img-responsive">');
            else if (lang == 'Korean') $('#dLabel div.lang-dropdown-sm').html('<img src="assets/img/org/flagsicon/south-korea-32.png" style="width: 70%" alt="KR" class="img-responsive">');
            else if (lang == 'Arabic') $('#dLabel div.lang-dropdown-sm').html('<img src="assets/img/org/flagsicon/saudi-arabia-32.png" style="width: 70%" alt="SA" class="img-responsive">');
            $(this).click();
        }
    });
}
