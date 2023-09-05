$(document).ready(function () {
    $('#name-558c').keyup(function () {
       var rex = new RegExp($(this).val(), 'i');
         $('.u-table-body tr').hide();
         $('.u-table-body tr').filter(function () {
             return rex.test($(this).text());
         }).show();
 
         })
 
 });
