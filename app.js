const input= document.getElementById("taskInput");
const addBtn= document.getElementById("addBtn");
const taskList= document.getElementById("taskList");

addBtn.addEventListener("click", function(){
    const taskText= input.value;
    if(taskText.trim()=== "") return; 

    const li= document.createElement("li");
    //li.textContent= taskText;
    const span= document.createElement("span");
    span.textContent= taskText;
    span.classList.add("task-text");
    li.appendChild(span);

    const completeBtn= document.createElement("button");
    completeBtn.textContent="Tamamlandı";
    completeBtn.classList.add("complete-btn");

    completeBtn.addEventListener("click", function(){
        //li.classList.toggle("completed");
        span.classList.toggle("completed");
    });

    //li.insertBefore(completeBtn, li.firstChild);
    li.insertBefore(completeBtn, span);

    const deleteBtn= document.createElement("button");
    deleteBtn.textContent= "Sil";
    deleteBtn.style.marginLeft= "10px";

    //Silme Fonkiyonu
    deleteBtn.addEventListener("click", function(){
       li.remove();
    });
    li.appendChild(deleteBtn);

    taskList.appendChild(li);
    input.value= "";
/*     li.addEventListener("click", function(e){
        if(e.target === deleteBtn) return;
        if(li.style.textDecoration === "line-through"){
            li.style.textDecoration= "none";
        } else{
            li.style.textDecoration= "line-through";
        }
    }); */
});

