window.addEventListener ("load", () => 
{
    async function sumarPuntos () 
    {
        var operacion = "suma";
        try 
        { 
            const response = await fetch 
            ("./sumar.php", 
                {
                    method: "POST",
                    headers: 
                    {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: `operacion=${operacion}`
                }
            );
            let puntosdiv = document.getElementById ("puntosd");

            if (response.status === 200)
            {
                const responseText =await response.text ();             
                puntosdiv.innerHTML = "Tienes"+responseText;
            } 
            else 
            {
                throw new Error ("Error en la solicitud"); 
            }
        }
        catch (error)
        {
            console.log (error);
        }
    }

    async function restarPuntos () 
    {
        var operacion = "resta";
        try 
        { 
            const response = await fetch 
            ("./restar.php", 
                {
                    method: "POST",
                    headers: 
                    {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: `operacion=${operacion}`
                }
            );
            let puntosdiv = document.getElementById ("puntosd");

            if (response.status === 200)
            {
                const responseText =await response.text ();
                puntosdiv.innerHTML = "Tienes"+responseText;
            } 
            else 
            {
                throw new Error ("Error en la solicitud"); 
            }
        }
        catch (error)
        {
            console.log (error);
        }
    }

    sumar.addEventListener ("click", (evento) =>
    {
        sumarPuntos ();
    });

    restar.addEventListener ("click", (evento) =>
    {
       restarPuntos ();
    });
});