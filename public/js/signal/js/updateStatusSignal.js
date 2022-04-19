const checkboxes = document.querySelectorAll('input[type="checkbox"]');

for(let i = 0; i<checkboxes.length; i++){
    checkboxes[i].addEventListener('change', function (e){

        const id = this.getAttribute('id');
        const body ={'status': this.checked ?? 0}

        update(body, id)

    })
}

function update(body, id){
    console.log(body)
    const route = `/painel/sinais/${id}`
    fetch(route,{
        method: 'put',
        body:  JSON.stringify(body),
        headers: {
            "Content-Type": "application/json; charset=utf-8",
            "Accept": "application/json",
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
}
