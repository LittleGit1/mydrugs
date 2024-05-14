import Layout from "../../Shared/Layout";
import axios from "axios";
import { Link } from "@inertiajs/react";
import { useState } from "react";

const Shop = ({ product_categories }) => {
    return (
        <main>
            <section className="bg-pink-500">
                <div className="container mx-auto py-64">
                    <h2>Welcome to the shop</h2>
                </div>
            </section>
            <div className="container mx-auto"></div>
        </main>
    );
};

Shop.layout = (page) => <Layout children={page} />;

export default Shop;
