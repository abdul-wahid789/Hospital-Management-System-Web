count=1
function prescrption_new_med() {

    count+=1;
    html='<tr>\
    <td class="sl">\
        '+count+'\
    </td>\
    <td>\
        <input type="text" name="" id="medicine_'+count+'">\
    </td>\
    <td>\
        <input type="text" name="" id="frequency_'+count+'">\
    </td>\
    <td>\
        <input type="text" name="" id="relation_meal_'+count+'">\
    </td>\
</tr>'
table=document.getElementById("doctor-prescription-table");
table.innerHTML+=html
    
}