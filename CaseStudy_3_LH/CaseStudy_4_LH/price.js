function init() {
    var javaSingle = document.getElementById("javaSingle")
    var javaDouble = document.getElementById("javaDouble")
    var mochaDouble = document.getElementById("mochaDouble")
    var mochaSingle = document.getElementById("mochaSingle")
    var mcpSingle = document.getElementById("mcpSingle")
    var mcpDouble = document.getElementById("mcpDouble")
    var javaCheckBox = document.getElementById("javaCheckBox")
    var mochaCheckBox = document.getElementById("mochaCheckBox")
    var mcpCheckBox = document.getElementById("mcpCheckBox")
    var button = document.getElementById("submit")

    var checkFunc = function () {
        let checked = javaCheckBox.checked || mochaCheckBox.checked || mcpCheckBox.checked
        console.log(button.disabled)
        if (checked){
            button.disabled = false
        }
        else{
            button.disabled = true
        }
        if(javaCheckBox.checked){
            javaSingle.disabled = false
            javaDouble.disabled = false
        }
        else{
            javaSingle.disabled = true
            javaDouble.disabled = true
        }
        if(mochaCheckBox.checked){
            mochaSingle.disabled = false
            mochaDouble.disabled = false
        }else{
            mochaSingle.disabled = true
            mochaDouble.disabled = true
        }
        if(mcpCheckBox.checked){
            mcpSingle.disabled =false
            mcpDouble.disabled = false
        }else{
            mcpSingle.disabled =true
            mcpDouble.disabled = true
        }
    }
    javaCheckBox.onchange = checkFunc
    mochaCheckBox.onchange = checkFunc
    mcpCheckBox.onchange = checkFunc

}

window.onload = init