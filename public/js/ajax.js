async function like(id_user) {
    // Buoc 1:
    const url = "productdetail.php";
    const data = {id: id_user}
    const response = await fetch(url, {
        method: "POST",
        headers: {
            'Content-Type': 'application/json;charset=utf-8',
            'Accept': 'application/json;charset=UTF-8'
        },
        body: JSON.stringify(data)
    });

    // Buoc 2:
    const result = await response.json();
    
    // Hien thi giao dien
    const divResult = document.querySelector('#result');
    divResult.innerHTML = `${result.product_description}`;
}
