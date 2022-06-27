require('./bootstrap');

window.boolpress = {
    currentForm: null,
    itemId: null,
    openModal(event,id){
        event.preventDefault();
        this.itemId = id;
        this.currentForm = event.currentTarget.parentNode;
        $('#deleteModal').modal('show');
    },
    submitForm(){
        this.currentForm.submit();
    },
    changeImage(){
        let fileReader = new FileReader();
        fileReader.readAsDataURL(document.getElementById("image").files[0]);

        fileReader.onload = function (oFREvent) {
            document.getElementById("imgPreview").src = oFREvent.target.result;
        };
    }
}