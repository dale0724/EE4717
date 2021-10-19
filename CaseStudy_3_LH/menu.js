function init(){
    var java = document.getElementById("Java");
    var mocha = document.getElementById("Mocha");
    var mcp = document.getElementById("MCP");
    var javaPrice = document.getElementById("javaPrice");
    var mochaPrice = document.getElementById("mochaPrice");
    var mcpPrice = document.getElementById("mcpPrice");
    var radioJava = document.getElementsByName("javaType");
    var radioMocha = document.getElementsByName("mochaType")
    var radioMCP = document.getElementsByName("mcpType")
    var totalPrice = document.getElementById("totalPrice")
    var javaCalculate = function(){
        for(i=0;i<radioJava.length;i++){
            if(radioJava[i].checked){
                calculatePrice(parseFloat(radioJava[i].value) ,java,javaPrice)
            }
        }
        updateTotalPrice()
    }
    var mochaCalculate = function(){
        for(i=0;i<radioMocha.length;i++){
            if(radioMocha[i].checked){
                calculatePrice(parseFloat(radioMocha[i].value) ,mocha,mochaPrice)
            }
        }
        updateTotalPrice()
    }
    var mcpCalculate = function(){
        for(i=0;i<radioMCP.length;i++){
            if(radioMCP[i].checked){
                calculatePrice(parseFloat(radioMCP[i].value) ,mcp,mcpPrice)
            }
        }
        updateTotalPrice()
    }
    var updateTotalPrice = function(){
        let valJava = parseFloat(javaPrice.innerHTML)
        let valMocha = parseFloat(mochaPrice.innerHTML)
        let valMCP = parseFloat(mcpPrice.innerHTML)
        totalPrice.innerHTML = (valJava+valMCP+valMocha).toFixed(1)
    }
    java.oninput = javaCalculate
    mocha.oninput = mochaCalculate
    mcp.oninput = mcpCalculate
    for(i=0;i<2;i++){
        radioJava[i].onclick = javaCalculate
        radioMCP[i].onclick = mcpCalculate
        radioMocha[i].onclick = mochaCalculate
    }
}

function calculatePrice(price,quantity,totalPrice){
    if (!quantity.value){
        totalPrice.innerHTML = "0.0"
    }
    else{
        let val = price*parseInt(quantity.value) 
        totalPrice.innerHTML = val.toFixed(1)
    }
    
}



window.onload = init