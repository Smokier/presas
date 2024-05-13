'use client'
import React, { useEffect, useState } from 'react';
import Table from '@/app/home/Table';
import { PieChart } from '@mui/x-charts/PieChart';
import { Card, Button } from '@mui/material';
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
        <div className="bg-blue-50 min-h-screen">
            <header className="bg-gradient-to-r from-cyan-500 via-purple-500 to-blue-500 py-3">
                <div className="container mx-auto px-4">
                    <div className="flex justify-between items-center">
                        <div className="flex items-center space-x-4">
                            <img src="/assets/iconoempresa.png" alt="Icono de la Empresa" width="80" height="80" className="rounded-full" />
                            <span className="text-white text-xl font-semibold">Monitoreo de Agua Pluvial</span>
                        </div>
                        <nav className="flex items-center space-x-4">
                            <a href="nosotros" className="text-white hover:text-gray-200">Nosotros</a>
                            <a href="soporte" className="text-white hover:text-gray-200">Soporte</a>
                            <a href="login.php" className="text-white hover:text-gray-200">Cerrar Sesión</a>
                        </nav>
                    </div>
                </div>
            </header>
            <main className="container mx-auto px-4 mt-10">
                <div className="bg-white p-6 rounded-lg shadow-md">
                    <h2 className=" text-center text-2xl font-bold mb-4 text-blue-800">Selecciona una opción para saber el nivel del agua en tiempo real</h2>
                    <p className="text-center text-gray-600">Esta información es obtenida en tiempo real, directo de la página oficial de CONAGUA, para mayor información, da click en el siguiente botón.</p>
                    <div className="flex flex-wrap justify-center">
                        <div className="text-center w-full md:w-1/2 p-4">
                        <a href="https://sinav30.conagua.gob.mx:8080/Presas/" target="_blank" rel="noopener noreferrer" className="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            CONAGUA
                        </a>
                        </div>
                    </div>
                    <div className="flex flex-wrap justify-center">
                        <div className="w-full md:w-1/2 p-4">
                            {actual && (
                                <Card className="border-0">
                                    <PieChart
                                        series={[
                                            {
                                                data: [
                                                    { id: 0, value: Math.round((actual.llenano + Number.EPSILON) * 100), label: 'Estado actual' },
                                                    { id: 1, value: 100 - Math.round((actual.llenano + Number.EPSILON) * 100), label: 'Estado restante' }
                                                ],
                                            },
                                        ]}
                                        width={600} // Ajuste el ancho de la gráfica según sea necesario
                                        height={400} // Ajuste la altura de la gráfica según sea necesario
                                    />
                                </Card>
                            )}
                        </div>
                    </div>
                    <div className="flex flex-wrap justify-center mt-5">
                        <div className="container mx-auto px-4 mt-10">
                            <Table data={presas} setCurrent={setActual} />
                        </div>
                    </div>
                </div>
            </main>
        </div>
    );
}
export default Page;