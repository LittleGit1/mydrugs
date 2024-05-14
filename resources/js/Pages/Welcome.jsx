import Layout from "../Shared/Layout"

const Welcome = () => {
    return (
        <>
        <h1>Hello, world</h1>
        </>
    )
}

Welcome.layout = (page) => <Layout children={page} />

export default Welcome;