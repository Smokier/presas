'use client'
import React, { useEffect, useState } from 'react';
import Table from '@/app/home/Table';
import { PieChart } from '@mui/x-charts/PieChart';
function Page() {
    const [presas, setPresas] = useState([]);
    const [actual, setActual] = useState({});

    const fetchData = async () => {
        try{
            const response = await fetch('https://sinav30.conagua.gob.mx:8080/PresasPG/presas/reporte/2024-05-11');
            const data = await response.json();
            console.log(data);
            setPresas(data);
        }
        catch(error){
            console.log(error);
        }
    }

    useEffect(() => {
        fetchData();
    }
    , []);


    return (
        <div>
            <header class="bg-info py-3">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <img src="./iconoempresa.png" alt="" width="80" height="80" class="rounded-circle"/>
                <span class="h4 text-white ml-2">Monitoreo de Agua Pluvial</span>
            </div>
            <div class="col-auto">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="nosotros.php">Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contacto.php">Soporte</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Cerrar Sesión</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h2>Datos cliente</h2>
            <div class="row">
                <div class="col-md-6">
                    <h4>Especificaciones</h4>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Contenedores de Agua</td>
                                <td>4 tinacos de 2500 litros cada uno</td>
                            </tr>
                            <tr>
                                <td>Capacidad de Captación por Captador</td>
                                <td>403.2 litros por hora</td>
                            </tr>
                            <tr>
                                <td>Área Cubierta por Captador</td>
                                <td>4m<sup>2</sup></td>
                            </tr>
                            <tr>
                                <td>Tubería de Interconexión</td>
                                <td>100 metros de tubería PVC</td>
                            </tr>
                            <tr>
                                <td>Sistema de Respaldo de Energía</td>
                                <td>Para anergizar las bombas en caso de apagón</td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                <div class="col-md-6">
                    <canvas id="consumoAguaChart" width="400" height="300"></canvas>
                    <div class="row mt-5">
                        <div class="col-md-6">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalImagen">Regar Pasto y Plantas</button>
                        </div>
                        <div class="col-md-6">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalImagen1">Mandar agua al Inodoro</button>
                        </div>
                    </div>
                </div>
            </div>
            <h4>Datos de los Tinacos</h4>
            <p>Aquí se muestran los datos de los tinacos:</p>
        </div>
    </div>
</div>
<div className='flex flex-row items-evenly'>
        <div className='flex'>
            <Table data ={presas} setCurrent={setActual} />
        </div>
        {actual&&<PieChart
            series={[
                {
                data: [
                    { id: 0, value: (Math.round((actual.llenano + Number.EPSILON) * 100)), label: 'Estado actual' },
                    { id: 1, value: 100-(Math.round((actual.llenano + Number.EPSILON) * 100)), label: 'Estado restante' }
                ],
                },
            ]}
            width={400}
            height={200}
            />}
</div>
        </div>
    );
}

export default Page;
