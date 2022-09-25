/* Fungsi formatRupiah */
function formatRupiah(bilangan, prefix = 'Rp', postfix = ',-'){

	var	reverse = bilangan.toString().split('').reverse().join('');

	var ribuan 	= reverse.match(/\d{1,3}/g);

	var output	= ribuan.join('.').split('').reverse().join('');

	return prefix + ' ' + output + postfix;

}