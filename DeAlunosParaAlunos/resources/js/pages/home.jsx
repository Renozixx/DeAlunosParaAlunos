import React from 'react';
import { Head } from '@inertiajs/react';

export default function Home({ name }) {
    return (
        <div>
            <Head title="Home" />
            <h1>Olá, {name}!</h1>
        </div>
    );
}