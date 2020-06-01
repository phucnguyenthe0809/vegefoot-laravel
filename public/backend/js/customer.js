$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function resetOption(domOption){
    for (const e of domOption) {
        e.removeAttribute('selected')
    }
}


function showFromEdit(element) {
    let idChecked=element.getAttribute('id_data');
  
    let cat_name=element.innerHTML ;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        let idParent=this.responseText;
        
        document.getElementById('cat_edit').setAttribute('value',cat_name.trim());
        document.getElementById('cat_edit').setAttribute('data_id',idChecked);
        let dom_edit=document.querySelectorAll('div.modal-body option')
        resetOption(dom_edit);
        for (const e of dom_edit) {
            if(e.getAttribute('value')==idParent){
                
                e.setAttribute('selected','')
            }
            
        }
        
      }
    };
    xhttp.open("GET", '/api/get-parent-category/'+idChecked, true);
    xhttp.send();
    
    
    
}


$(document).ready(function () {
    let dom_edit=document.getElementsByClassName('js-edit-category');

    for (let index in  dom_edit) {
        let selected=dom_edit[index];
        selected.addEventListener("click", function(){
        showFromEdit(dom_edit[index]);
       });
       
    }

});


function update() {
 if(confirm('Bạn muốn cập nhật danh mục')){
    let cat_id=$('#cat_edit').attr('data_id');
    let cat_name=$('#cat_edit').val();
    let id_parent=$('#id_parent').val();
    $.ajax({
        type: "PUT",
        url: "/admin/category/"+cat_id,
        data:{
            'cat_name':cat_name,
            'id_parent':id_parent
        },
        dataType: "text",
        success: function (response) {
            let data=JSON.parse(response)
            if(data.message=='success')
            {
                location.reload();
            }
            
        }
    });
 }
   
    
}