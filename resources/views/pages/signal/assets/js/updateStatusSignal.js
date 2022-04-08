const checkboxes = document.querySelectorAll('input[type="checkbox"]');
for(let i = 0; i<checkboxes.length; i++){
    checkboxes[i].addEventListener('change', function (e){
        const status = this.checked ?? 0
        const id = this.getAttribute('id');
        const body ={'status': status}

        update(body, id)

    })
}

function update(body, id){
    console.log(body)
    const route = `sinais/${id}`
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
