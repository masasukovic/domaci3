function getCurrentRowData(id){
    var id = document.getElementById("id-"+id).innerText;
    var bookName = document.getElementById("name-"+id).innerText;
    var authorName = document.getElementById("author-"+id).innerText;
    var description = document.getElementById("description-"+id).innerText;

    insertInModal(id, bookName, authorName, description);
}

function insertInModal(id, bookName, authorName, description){
    var modalBody = document.getElementById("modalBody");
    modalBody.innerHTML= `
    <form action="editUser.php" method="POST">
    <div class="row">
        <input type="hidden" name="id" value="${id}">
        <div class="row">
            <input type="text" required name="bookName" class="form-control m-3" value="${book_name}" placeholder="Promijenite naziv knjige...">
        </div>
        
        <div class="row">
            <input type="text" required name="authorName" class="form-control m-3" value="${author_name}" placeholder="Promijenite autora...">
        </div>
        
        <div class="row">
            <input type="text" required name="description" class="form-control m-3" value="${description}" placeholder="Promijenite opis...">
        </div>
    </div>
    <div class="row mt-3">
        <button class="offset-9 col-2 btn btn-primary">Edit</button>
    </div>

    </form>
                        `
}

