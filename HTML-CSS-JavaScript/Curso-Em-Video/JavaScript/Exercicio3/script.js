function verificar()
{
    var data = new Date()
    var ano = data.getFullYear()
    var fano = document.getElementById("txtano")
    var res = document.getElementById("res")

    if(fano.value.length == 0 || fano.value > ano)
    {
        alert("[WARNING] \nVerifique os dados e tente novamente!")
    }

    else
    {
        var fsex = document.getElementsByName("radsex")
        var idade = ano - Number(fano.value)
        var genero = ""
        var img = document.createElement("img")
        img.setAttribute("id", "foto")

        if(fsex[0].checked)
        {
            genero = "Homem"

            if(idade >= 0 && idade < 10)
            {
                img.setAttribute("src", "_imagens/bebe-masculino.jpg")
            }

            else if(idade < 21)
            {
                img.setAttribute("src", "_imagens/adolescente-masculino.jpg")
            }

            else if(idade < 50)
            {
                img.setAttribute("src", "_imagens/adulto.jpg")
            }

            else
            {
                img.setAttribute("src", "_imagens/idoso.jpg")
            }
        }

        else
        {
            genero = "Mulher"

            if(idade >= 0 && idade < 10)
            {
                img.setAttribute("src", "_imagens/bebe-feminino.jpg")
            }

            else if(idade < 21)
            {
                img.setAttribute("src", "_imagens/adolescente-feminino.jpg")
            }

            else if(idade < 50)
            {
                img.setAttribute("src", "_imagens/adulta.jpg")
            }

            else
            {
                img.setAttribute("src", "_imagens/idosa.jpg")
            }
        }

        res.style.textAlign = "center"
        res.innerHTML = "Detectamos "+ genero +" com "+ idade +" anos"
        res.appendChild(img)
    }
}