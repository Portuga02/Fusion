window.onload = function () {
    //configuração de variaveis
    var form = document.getElementById("form");
    var input = document.getElementById("input");
    var btn = document.getElementById("btn");
    var list = document.getElementById("list");
    var btnClr = document.getElementById("btnClr");
    var id = 1;

    var liItem = "";
    var todoList = [];

    //button evento
    btn.addEventListener("click", addTodoItem);

    //list evento
    list.addEventListener("click", boxChecked);

    //event evento
    btnClr.addEventListener("click", clearList);

    if (localStorage.length <= 0) {
        btnClr.style.display = "none"; //hide clear btn	
        console.log("button");
    }

    //verificando local
    if (localStorage.length > 0) {
        displayList();
    }


    //adiciona item a lista
    function addTodoItem() {
        if (input.value === "") {
            alert("Por Favor Insira alguma anotação");
        } else {
            if (list.style.borderTop === "") {
                console.log("here!")
                list.style.borderTop = "2px solid white";
                btnClr.style.display = "inline";
            }
            var text = input.value;
            var item = `<li id="li-${id}">${text}<input id="box-${id}"class="checkboxes" type="checkbox"></li>`;
            list.insertAdjacentHTML('beforeend', item);
            liItem = {item: text, checked: false};
            todoList.push(liItem);
            id++;
            addToLocalStorage()
            form.reset();
        }
    }


    function boxChecked(event) {
        const element = event.target;
        if (element.type === "checkbox") {
            element.parentNode.style.textDecoration = "line-through";
            todoList = JSON.parse(localStorage.getItem("todoList"));
            todoList[element.id.split('-')[1] - 1].checked = element.checked.toString();
            localStorage.setItem("todoList", JSON.stringify(todoList));
        }
    }

    //adicionando dados ao armazenamento local
    function addToLocalStorage() {
        if (typeof (Storage) !== "undefined") {
            localStorage.setItem("todoList", JSON.stringify(todoList));
        } else {
            alert("ops! Seu navegador não suporta armazenamento local");
        }
    }

    //exibir toda a lista de tarefas
    function displayList() {
        list.style.borderTop = "2px solid white";
        todoList = JSON.parse(localStorage.getItem("todoList"));
        todoList.forEach(function (element) {
            console.log(element.item)
            var text = element.item;
            var item = `<li id="li-${id}">${text}<input id="box-${id}" class="checkboxes" type="checkbox"></li>`;
            list.insertAdjacentHTML("beforeend", item);

            if (element.checked) {
                var li = document.getElementById("li-" + id);
                li.style.textDecoration = "line-through";
                li.childNodes[1].checked = element.checked;
            }
            id++;
        });
    }

    // função lista
    function clearList() {
        todoList = [];
        localStorage.clear();
        list.innerHTML = "";
        btnClr.style.display = "none";
        list.style.borderTop = "";
    }
}