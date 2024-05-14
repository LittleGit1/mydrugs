import { Link } from "@inertiajs/react";

const Layout = ({ children }) => {
    return (
        <>
            <nav>
                <Link href="/">Home</Link>
                <Link href="/shop">Shop</Link>
            </nav>
            {children}
        </>
    );
};

export default Layout;
