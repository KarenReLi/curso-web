console.log ("Pokemon_showdown2");

class entrenadorPokemon
{
    constructor (nombre, regionDeOrigen, numeroDeMedallas, pokemon1, pokemon2, pokemon3, pokemon4, pokemon5, pokemon6)
    {
        this.nombre=nombre;
        this.region=regionDeOrigen;
        this.medallas=numeroDeMedallas;
        this.p1=pokemon1;
        this.p2=pokemon2;
        this.p3=pokemon3;
        this.p4=pokemon4;
        this.p5=pokemon5;
        this.p6=pokemon6;
    }
    batalla1 ()
    {
        console.log ("Entrenador: "+this.nombre+" Pokemon:"+this.p1);
    } 
    batalla2 ()
    {
        console.log ("Entrenador: "+this.nombre+" Pokemon:"+this.p2);
    }
    batalla3 ()
    {
        console.log ("Entrenador: "+this.nombre+" Pokemon:"+this.p3);
    }
    batalla4 ()
    {
        console.log ("Entrenador: "+this.nombre+" Pokemon:"+this.p4);
    } 
    batalla5 ()
    {
        console.log ("Entrenador: "+this.nombre+" Pokemon:"+this.p5);
    }
    batalla6 ()
    {
        console.log ("Entrenador: "+this.nombre+" Pokemon:"+this.p6);
    } 
}

class pokemon
{
    constructor (nombre, nivel, vida, ataque, ataqueEspecial, defensa, defensaEspecial, velocidad, tipoPrincipal, tipoSecundario, movimiento1, movimiento2, movimiento3, movimiento4)
    {
        this.nombre=nombre;
        this.nivel=nivel;
        this.vida=vida;
        this.ataque=ataque;
        this.ataqueEspecial=ataqueEspecial;
        this.defensa=defensa;
        this.defensaEspecial=defensaEspecial;
        this. velocidad=velocidad;
        this.tipoPrincipal=tipoPrincipal;
        this.tipoSecundario=tipoSecundario;
        this.mov1=movimiento1;
        this.mov2=movimiento2;
        this.mov3=movimiento3;
        this.mov4=movimiento4;
    }
    ataque1 ()
    {
        console.log ("El pokemon "+this.nombre+" uso el ataque "+this.mov1);
    }
    ataque2 ()
    {
        console.log ("El pokemon "+this.nombre+" uso el ataque "+this.mov2);
    }
    ataque3 ()
    {
        console.log ("El pokemon "+this.nombre+" uso el ataque "+this.mov3);
    }
    ataque4 ()
    {
        console.log ("El pokemon "+this.nombre+" uso el ataque "+this.mov4);
    }
}

class movimientos
{
    constructor (nombre, potencia, probabilidad, tipo, categoria)
    {
        this.nombre=nombre;
        this.potencia=potencia;
        this.probobabilidad=probabilidad;
        this.tipo=tipo;
        this.categoria=categoria;
    }
    
}

//=================MOVIMIENTOS===========================//
let destruccion = new movimientos ("destruccion", 40, "100%", "Normal", "Fisico");
let golpeKarate = new movimientos ("golpeKarate", 50, "100%", "lucha", "Fisico");
let puñoTrueno = new movimientos ("puñoTrueno", 75, "100%", "Electrico", "Normal");
let vientoCortante = new movimientos ("vientoCortante", 80, "100%", "Normal", "Especial");
let latigoCepa = new movimientos ("latigoCepa", 45, "100%", "Planta", "Fisico");
let ataqueArena = new movimientos ("ataqueArena", "_", "100%", "Tierra", "Espacio");
let picotazoVen = new movimientos ("picotazoVen", 15, "100%", "Veneno", "Fisico");
let mordisco = new movimientos ("mordisco", 60, "100%", "Siniestro", "Fisico");
let acido = new movimientos ("acido", 40, "100%", "Veneno", "Especial");
let trueno = new movimientos ("trueno", 110, "70%", "Electrico", "Especial");
let agilidad = new movimientos ("agilidad", "_", "_", "Psiquico", "Espacio");
let chupaVidas = new movimientos ("chupaVidas", 80, "100%", "Bicho", "Fisico");
let arraigo = new movimientos ("arraigo", "_", "_", "Planta", "Espacio");
let resplandor = new movimientos ("resplandor", 70, "100%", "Psiquico", "Especial");
let dobleRayo = new movimientos ("dobleRayo", 75, "100%", "Bicho", "Especial"); 

//=================POKEMONES=============================//
let lucario = new pokemon ("lucario", 8, 67, 140, 50, 43, 189, 145, "Lucha", "Acero", "destruccion", "puñoTrueno", "chupaVidas", "dobleRayo");
let fidough = new pokemon ("fidough", 12, 34, 115, 123, 72, 100, 57, "Volador", "Hada", "resplandor", "destruccion", "dobleRayo", "picotazoVen");
let wartotle = new pokemon ("wartotle", 54, 134, 49, 129, 43, 50, 75, "Agua", "Psiquico", "agilidad", "destruccion", "golpeKarate", "acido");
let furioseta = new pokemon ("furioseta", 15, 6, 13, 54, 79, 102, 54, "Planta", "Siniestro", "resplandor", "acido", "agilidad", "mordisco");
let rufflet = new pokemon ("rufflet", 76, 100, 67, 32, 86, 73, 33, "Normal", "Volador", "trueno", "picotazoVen", "latigoCepa", "ataqueArena");
let araquanid = new pokemon ("araquanid", 12, 82, 21, 91, 46, 74, 16, "Agua", "Bicho", "resplandor", "acido", "mordisco", "chupaVidas");
let mamoswine = new pokemon ("mamoswine", 83, 13, 63, 39, 67, 78, 12, "Hielo", "Tierra", "dobleRayo", "latigoCepa", "destruccion", "golpeKarate");
let evavroom = new pokemon ("evavroom", 32, 15, 43, 89, 13, 74, 9, "Acero", "Veneno", "picotazoVen", "arraigo", "mordisco", "chupaVidas");
let rabsca = new pokemon ("rabsca", 43, 82, 124, 83, 90, 12, 78, "Bicho", "Psiquico", "dobleRayo", "resplandor", "puñoTrueno", "acido");
let rapidash = new pokemon ("rapidash", 32, 82, 672, 86, 45, 13, 78, "Dragon", "Fuego", "arraigo", "acido", "trueno", "destruccion");
let combee = new pokemon ("combee", 65, 92, 647, 78, 12, 74, 89, "Bicho", "Volador", "dobleRayo", "acido", "vientoCortante", "arraigo");
let gabite = new pokemon ("gabite", 12, 73, 78, 65, 29, 81, 6, "Dragon", "Tierra", "ataqueArena", "acido", "destruccion", "arraigo");
let slowbro = new pokemon ("slowbro", 14, 82, 67, 55, 43, 86, 78, "Agua", "Psiquico", "destruccion", "resplandor", "agilidad", "acido");
let surskit = new pokemon ("surskit", 14, 78, 9, 67, 98, 36, 43, "Bicho", "Agua", "resplandor", "agilidad", "acido", "trueno");
let tropius = new pokemon ("tropius", 25, 89, 67, 27, 92, 1, 783, "Planta", "Volador", "chupaVidas", "dobleRayo", "puñoTrueno", "destruccion");

//=================ENTRENADORES===========================//
let fernanda = new entrenadorPokemon("Fernanda", "CDMX", 10,  "lucario", "tropius", "rapidash", "mamoswine", "furioseta", "slowbro");
let enrique= new entrenadorPokemon ("Enrique", "HongKong", 15, "fidough", "rabsca", "rufflet", "evavroom", "gabite", "surskit");

    console.log ("Combate 1");
    fernanda.batalla1 ();
    console.log (lucario);
    enrique.batalla1 ();
    console.log (fidough);
    lucario.ataque1 ();
    console.log (destruccion);
    fidough.ataque1 ();
    console.log (resplandor);
    console.log ("Ha ganado el pokemon fidough");
    console.log ("Ha perdido el pokemon lucario");

    console.log ("Combate 2");
    fernanda.batalla2 ();
    console.log (tropius);
    enrique.batalla2 ();
    console.log (rabsca);
    tropius.ataque2 ();
    console.log (dobleRayo);
    rabsca.ataque2 ();
    console.log (resplandor);
    console.log ("Ha ganado el pokemon tropius");
    console.log ("Ha perdido el pokemon rabsca");

    console.log ("Combate 3");
    fernanda.batalla3 ();
    console.log (rapidash);
    enrique.batalla3 ();
    console.log (rufflet);
    rapidash.ataque3 ();
    console.log (trueno);
    rufflet.ataque3 ();
    console.log (latigoCepa);
    console.log ("Ha ganado el pokemon rapidash");
    console.log ("Ha perdido el pokemon rufflet");

    console.log ("Combate 4");
    fernanda.batalla4 ();
    console.log (mamoswine);
    enrique.batalla4();
    console.log (evavroom);
    mamoswine.ataque4 ();
    console.log (golpeKarate);
    evavroom.ataque4 ();
    console.log (chupaVidas);
    console.log ("Ha ganado el pokemon evavroom");
    console.log ("Ha perdido el pokemon mamoswine");

    console.log ("Combate 5");
    fernanda.batalla5 ();
    console.log (furioseta);
    enrique.batalla5 ();
    console.log (gabite);
    furioseta.ataque1 ();
    console.log (resplandor);
    gabite.ataque1 ();
    console.log (ataqueArena);
    console.log ("Ha ganado el pokemon furioseta");
    console.log ("Ha perdido el pokemon gabite");

    console.log ("Combate 6");
    fernanda.batalla6 ();
    console.log (slowbro);
    enrique.batalla6 ();
    console.log (surskit);
    slowbro.ataque2 ();
    console.log (resplandor);
    surskit.ataque2 ();
    console.log (agilidad);
    console.log ("Ha ganado el pokemon slowbro");
    console.log ("Ha perdido el pokemon surskit");

    console.log ("Batallas pokemon terminadas");