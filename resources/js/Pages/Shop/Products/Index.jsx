import { useEffect, useState } from "react";
import Layout from "../../../Shared/Layout";
import axios from "axios";
import Collapsible from '../../../Components/Collapsible';
import Product from '../../../Components/Product';

const Products = ({ product_categories, product_subcategories, products }) => {
    const [categories, setCategories] = useState(product_categories);
    const [subcategories, setSubcategories] = useState(product_subcategories);

    const [selectedCategories, setSelectedCategories] = useState([]);
    const [selectedSubcategories, setSelectedSubcategories] = useState([]);

    const [productsList, setProductsList] = useState(products);

    /**
     * Filter subcategories by their foreign key relationship to category
     */
    useEffect(() => {
        let newSubcats = [];
        selectedCategories.forEach((category) => {
            const subcats = product_subcategories.filter(
                (subcategory) => subcategory.product_category_id === category.id
            );
            newSubcats.push(...subcats);
        });
        setSubcategories(newSubcats);
    }, [selectedCategories]);

    const onChangeCategory = (event) => {
        const slug = event.target.name;

        const matchedCategory = product_categories.find(
            (category) => category.slug === slug
        );

        const indexExists = selectedCategories.findIndex(
            (category) => category.id === matchedCategory.id
        );

        if (indexExists < 0) {
            setSelectedCategories([
                ...selectedCategories,
                { id: matchedCategory.id, slug: matchedCategory.slug },
            ]);
            return;
        }

        const newCats = selectedCategories.filter(
            (category) => category.id !== matchedCategory.id
        );
        setSelectedCategories(newCats);
    };

    const onChangeSubcategory = (event) => {
        const slug = event.target.name;

        const matchedSubcategory = product_subcategories.find(
            (subcategory) => subcategory.slug === slug
        );

        const indexExists = selectedSubcategories.findIndex(
            (subcategory) => subcategory.id === matchedSubcategory.id
        );

        if (indexExists < 0) {
            setSelectedSubcategories([
                ...selectedSubcategories,
                {
                    id: matchedSubcategory.id,
                    slug: matchedSubcategory.slug,
                    parent_id: matchedSubcategory.product_category_id,
                },
            ]);
            return;
        }

        const newSubcats = selectedSubcategories.filter(
            (subcategory) => subcategory.id !== matchedSubcategory.id
        );
        setSelectedSubcategories(newSubcats);
    };

    const onUpdateFilter = () => {
        const url = generateURL();

        window.history.pushState(null, "", url.toString());

        const apiUrl = generateURL(true);

        axios
            .get(apiUrl.toString())
            .then((response) => {
                setProductsList(response.data.data);
            })
            .catch((err) => console.log(err));
    };

    const generateURL = (isApi = false) => {
        const BASE_URL = isApi
            ? "http://mydrugs.test/api/v1/products"
            : "http://mydrugs.test/shop/products";

        const url = new URL(BASE_URL);

        if (selectedCategories.length > 0)
            url.searchParams.append(
                "category",
                selectedCategories.map((category) => category.slug)
            );

        if (selectedSubcategories.length > 0)
            url.searchParams.append(
                "subcategory",
                selectedSubcategories.map((subcategory) => subcategory.slug)
            );

        return url;
    };

    return (
        <>
            <div className="container mx-auto grid grid-cols-12 gap-x-4">
                <aside className="col-span-3">
                    <Collapsible
                        name="Category"
                        data={categories}
                        initiallyHidden={true}
                        onChangeValue={onChangeCategory}
                    />
                    <Collapsible
                        name="Subcategory"
                        data={subcategories}
                        initiallyHidden={true}
                        onChangeValue={onChangeSubcategory}
                    />
                    <button
                        className="mt-4 bg-pink-500 text-white font-bold rounded-xl px-4 py-2 w-full"
                        onClick={() => onUpdateFilter()}
                    >
                        Update
                    </button>
                </aside>
                <main className="col-span-9">
                    <section>
                        <ul className="grid grid-cols-3 gap-4">
                            {productsList &&
                                productsList.map((product) => <Product product={product} />)}
                        </ul>
                    </section>
                </main>
            </div>
        </>
    );
};

Products.layout = (page) => <Layout children={page} />;

export default Products;
