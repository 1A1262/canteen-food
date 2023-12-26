function process(data){
    let maincontainer = document.getElementById("main-container")
    for(eachrow of data){
        let recipe = eachrow.recipe
        let price = eachrow.price
        let imageurl = eachrow.image
        let card = document.createElement("div")
        card.classList.add("contain")
        let image = document.createElement("img")
        image.src = `${imageurl}`
        card.appendChild(image)
        let heading = document.createElement("h4")
        heading.textContent = `${recipe}`
        card.appendChild(heading)
        let para = document.createElement("p")
        para.textContent = `price:${price}/rs`
        card.appendChild(para)
        document.body.appendChild(card)
        maincontainer.appendChild(card)

    }
}
fetch("getfood.php").then(response => response.json()).then(data => process(data)).error(console.log("unable to fetch!!!"));