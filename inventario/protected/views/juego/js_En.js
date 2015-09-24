var Frase=new Array()

Frase[0] = "                                        Hola carro perro cuando como papa va el amigo vamos claro cosas mismo noche parece estar alguien tan mía pero fue favor nadie parece quieres quien mi una ser gente por mucho quiero quiere hay se sí verdad sabes por dice dije otro acuerdo como dije donde parece mañana gran pasar cosa señor gusta creo tus no cosas desde donde no antes vida tienes muy nuestro gracias nos uno usted tal fue necesito puedes con así son voy donde después hace";
Frase[1] = "                                        Perro";
Frase[2] = "                                        Gato";
Frase[3] = "                                        Lazo";
Frase[4] = "                                        Chamrra";
Frase[5] = "                                        Gafas";
var F = Frase.length; var aleatorio=Math.round(Math.random()*(F-1));


function mostrarFrase()
{
document.write(Frase[aleatorio]);
}



             var temporizador;
           
function iniciar() {
                 temporizador = setInterval("wordCount()", 62000);
             }
            
                var cronometro;

                    function detenerse()
                    {
                    clearInterval(cronometro);
                    }
           

function wordCount() {

        textoArea = document.getElementById("area").value;
        numeroCaracteres = textoArea.length;
        inicioBlanco = /^ /
        finBlanco = / $/
        variosBlancos =  /[ ]+/g 
        textoArea = textoArea.replace(inicioBlanco,"");
        textoArea = textoArea.replace(finBlanco,"");
        textoArea = textoArea.replace(variosBlancos," ");
        textoAreaDividido = textoArea.split(" ");
        numeroPalabras = textoAreaDividido.length;
        tC = (numeroCaracteres==1)?" carácter":" Pulsaciones";
        tP = (numeroPalabras==1)?" palabra":" Palabras por minuto";

        var stringA = textoArea;
        var stringB = Frase[aleatorio];


            if (stringA==stringB)
            {
                        detenerse(), alert ("Resultados"+ "\n" +  numeroCaracteres + tC +"\n" + numeroPalabras + tP + "\n" + "Todas las palabras son correctas" );
                }
                else {

                        detenerse(), alert ("Resultados"+ "\n" +  numeroCaracteres + tC +"\n" + numeroPalabras + tP + "\n" + "Tuviste algunos errores");
                }
      }



function carga()

                {
        contador_s =0;
        contador_m =0;
        s = document.getElementById("segundos");
        m = document.getElementById("minutos");
        cronometro = setInterval(

            function(){

                if(contador_s==60)
                        {
                    contador_s=0;
                    contador_m++;
                    m.innerHTML = contador_m;
                    if(contador_m==60)

                    {
                         contador_m=0;
                    }
                    } 
                    s.innerHTML = contador_s;
                    contador_s++;
                 }
                 ,1000);
    }

function Mostrar(Div){
                    if (Div.style.display == "none"){
                    Div.style.display = ""
                    }
            else{
                    Div.style.display = "none"
             }
                    }

function carga()
            {
                contador_s =0;
                contador_m =0;
                s = document.getElementById("segundos");
                m = document.getElementById("minutos");
                cronometro = setInterval(
            function(){
                if(contador_s==60)
                        {
                    contador_s=0;
                    contador_m++;
                    m.innerHTML = contador_m;
                    if(contador_m==60)
                         {
                         contador_m=0;
                                }
                        } 
                    s.innerHTML = contador_s;
                    contador_s++;
                        }
                 ,1000);
                        }

      

function scroll() 
                    { 
            document.frm.w.value = Frase[aleatorio]; 
            Frase[aleatorio] = Frase[aleatorio].substring(1, Frase[aleatorio].length) + Frase[aleatorio].charAt(0); 
            window.setTimeout("scroll()",150); 
            } 