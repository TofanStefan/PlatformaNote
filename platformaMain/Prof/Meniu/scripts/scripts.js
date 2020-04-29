function addMat() {
    var x = document.getElementById("addM");
    var y = document.getElementById("hide")
    var z = document.getElementById("hide1")
    var c = document.getElementById("hide2")
    y.style.display = "none";
    z.style.display = "none";
    x.style.display = "block";
}

function exit() {
    var x = document.getElementById("addM");
    var y=document.getElementById("hide")
    var z=document.getElementById("hide1")
    var c=document.getElementById("hide2")
    x.style.display="none";
    y.style.display = "block";
    z.style.display="block";

}

function add() {
    var x = document.getElementById("inpt");
    var y = document.getElementById("add");
    y.style.display="none";
    x.style.display="block";
}
let deletedItems = new Array();
let addedItems = new Array();

let currentItems=new Array();
function currentItm() {

    const parent = document.getElementById("remove");
    const children = parent.getElementsByTagName("div");

    for(var i=0;i<children.length;i++){
        currentItems.push(children[i].firstChild.textContent);
    }


}

function addMaterie() {
    var container=document.getElementById("remove");
    const addForm = document.forms['add-materie'];
    addForm.addEventListener('submit',function (e) {
        e.preventDefault();
        var value=addForm.querySelector('input[type="text"]').value;

        const input=addForm.querySelector('input[type="text"]');
        if(value.length<4)
            alert("Numele materie trebuie sa contina cel putin 4 caractere")
        else {

            var lowerCase=value.toLowerCase();
            const nameCapitalized = value.charAt(0).toUpperCase() + lowerCase.slice(1)
            if(currentItems.indexOf(nameCapitalized)>=0){
                alert("This item is already added in the data base");
            }
            else {
                currentItems.push(nameCapitalized);
                addedItems.push(nameCapitalized);
                var newDiv = document.createElement("div");
                var btn = document.createElement("BUTTON");
                btn.innerHTML = "－";
                var header = document.createElement("H4");
                header.innerHTML = nameCapitalized;
                btn.classList.add("btn");
                btn.classList.add("btn-danger");
                btn.classList.add("btn-circle");
                btn.classList.add("btn-sm");
                btn.classList.add("for-button");
                newDiv.classList.add("d-flex");
                newDiv.classList.add("justify-content-between");
                newDiv.appendChild(header);
                newDiv.appendChild(btn);
                var numb1 = Math.random();
                var id = header.innerHTML + numb1;
                newDiv.id = id;
                btn.setAttribute("onclick", "remove(this)");
                container.appendChild(newDiv);
                input.value = "";
            }
        }
    });

}
function remove(div) {

    var materii= document.getElementById("remove");
    var id=div.parentElement.id;
    const value=div.parentElement.firstChild.innerHTML;
    if(id==value) {
        deletedItems.push(id);
    }
    //remove from currentItems front end validation
    const curentIndex=currentItems.indexOf(value);
    for(var i=curentIndex;i<currentItems.length-1;i++)
        currentItems[i]=currentItems[i+1];
    currentItems.length=currentItems.length-1;
    const index=addedItems.indexOf(value);

    if(index>=0) {
        // remove from deleted Items array -> parsed to php
        for(var i=index;i<addedItems.length-1;i++)
            addedItems[i]=addedItems[i+1];
        addedItems.length=addedItems.length-1;
    }
    var kid =document.getElementById(id);
    materii.removeChild(kid);
}

function sendData() {

    $(document).ready(function(){
        $("#sub").click(function(){
            $.post("scripts/editItems.php",
                {
                    added: addedItems,
                    deletedItems: deletedItems
                },
                function(data,status){
                    if(status=='success')
                        alert("Successfully modified data base.");
                    else
                        alert(status);
                });
        });
    });

}



