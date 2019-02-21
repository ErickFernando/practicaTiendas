<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Descripción</title>
        <style>
            h4{
                margin-left: 15px;
            }
            p{
            margin-left: 16px;
            }
        </style>
    </head>
    <body>

        <div>
            <header style="background-color: #CCC0C0">
                <h2 style="text-align: center">{$desc['nombre_corto']}</h2>
                <h5>
                    Codigo: {$ordenador['cod']}
                </h5>
            </header>
            <section style="background-color:#E4E0E0">
                <h4 >Procesador</h4><p>{$ordenador['procesador']}</p>

                <h4>RAM: </h4>
                <p>{$ordenador['RAM']} GB</p>

                <h4>Disco</h4>
                <p>{$ordenador['disco']}</p>

                <h4>Grafica</h4>
                <p>{$ordenador['grafica']}</p>

                <h4>Unidad Óptica</h4>
                <p>{$ordenador['unidadoptica']}</p>

                <h4>Sistema Operativo</h4>
                <p>{$ordenador['SO']}</p>

                <h4>Otros</h4>

                <h4>PVP</h4>
                <p>{$desc['PVP']}</p>
                <p>
                    {$ordenador['otros']}
                </p>
                    <h4>Descripción</h4>
                    <p>{$desc['descripcion']}</p>
                </section>
            </div>

        </body>
    </html>