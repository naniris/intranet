let Checked = null;
for (let CheckBox of document.getElementsByClassName('check')){
    CheckBox.onclick = function(){
        if(Checked!=null){
            Checked.checked = false;
            Checked = CheckBox;
        }
        Checked = CheckBox;
    }
}
// $(".check").click(function(){
//     if($(this).is(":checked")){
//         let val = $(this).attr("value");
//          alert(val);
//     }else{

//     }
// })

// $(".check1").click(function(){
//     if($(this).is(":checked")){
//         $(".check2").removeAttr("value");
//         $(".check3").removeAttr("value");
//         $(".check4").removeAttr("value");
//     }
// })

let date = new Date();
let day = date.getDate();
let month = date.getMonth()+1;
let year = date.getFullYear();
// console.log()
let fecha = "year+month+day";
console.log(fecha);
// var fecha1 = document.getElementById("fecha");

// $("#fecha").attr("value","fecha")


