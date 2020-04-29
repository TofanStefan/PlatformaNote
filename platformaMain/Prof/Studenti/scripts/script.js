let notaActivitate=new Array();
let notaExamen=new Array();
let id=new Array();
function editGrades () {
    var table = document.getElementById("table"), index;
    var len = table.rows.length;
    for (var i = 1; i < len; i++) {

            table.rows[i].addEventListener("click", function () {
                if(this.cells[1].firstChild.nodeName!="INPUT") {
                    index = this.rowIndex;
                    console.log(index);
                    notaActivitate[i] = this.cells[1].innerHTML;
                    notaActivitate[i] = this.cells[2].innerHTML;
                    var newDiv = document.createElement("input");
                    var newDiv2 = document.createElement("input");
                    newDiv.classList.add("text-center");
                    newDiv2.classList.add("text-center");
                    newDiv.style.width = "50px";
                    newDiv2.style.width = "50px";
                    this.cells[2].firstChild.replaceWith(newDiv);
                    this.cells[1].firstChild.replaceWith(newDiv2);

                }
            });

    }
}

function save() {
    var table = document.getElementById("table"), index;
    var len = table.rows.length;
    for (var i = 1; i < len; i++) {
        if(table.rows[i].cells[1].firstChild.nodeName=="INPUT") {
            var nume=table.rows[i].cells[0].innerHTML;
            console.log(nume);
            var fChild_activ=table.rows[i].cells[1].firstChild;
            var fChild_exam=table.rows[i].cells[2].firstChild;
            var notaActivitate = fChild_activ.value;
            var notaExamen = fChild_exam.value;
            if(isNaN(notaActivitate)==true){
                alert("Introduceri un numar 1-10");
                return;
                }
            if(isNaN(notaActivitate)==true){
                alert("Introduceri un numar 1-10");
                return;
                }
            if((notaActivitate)<1||notaActivitate>10){
                alert("Introduceri un numar 1-10");
                return;
            }
            if((notaExamen)<1||notaExamen>10){
                alert("Introduceri un numar 1-10");
                return;
            }


            var media=(parseFloat(notaExamen)+parseFloat(notaActivitate))/2;
            table.rows[i].cells[1].removeChild(fChild_activ);
            table.rows[i].cells[2].removeChild(fChild_exam);
            table.rows[i].cells[1].innerHTML=notaActivitate;
            table.rows[i].cells[2].innerHTML=notaExamen;
            table.rows[i].cells[3].innerHTML=media;

            if(media>=5){
                table.rows[i].cells[4].style.color="white";
                table.rows[i].cells[4].style.fontStyle="bold";
                table.rows[i].cells[4].innerHTML="DA";
            }
            else {
                table.rows[i].cells[4].style.color="red";
                table.rows[i].cells[4].style.fontStyle="bold";

                table.rows[i].cells[4].innerHTML = "NU";

            }
                    $.post("scripts/editGrades.php",
                        {
                            nA: notaActivitate,
                            nE: notaExamen,
                            med: media,
                            id: test,
                            nume:nume
                        },
                     );
    }
    }
}


