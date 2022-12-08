count=1
function prescrption_new_bill() {

    count+=1;
    html='<tr>\
    <td class="sl">\
        '+count+'\
    </td>\
    <td>\
        <input type="text" name="" id="bill_'+count+'">\
    </td>\
    <td>\
        <input type="text" name="" id="amount_'+count+'">\
    </td>\
</tr>'
table=document.getElementById("doctor-prescription-table");
table.innerHTML+=html
    
}