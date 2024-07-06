import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head } from "@inertiajs/react";
import { Button } from "@/Components/ui/button";

const Plans = ({ plans, auth }) => {
    const handleSubscribe = (planId) => {
        const paymentMethod = prompt("Enter your payment method token:");
        Inertia.post("/subscribe", {
            plan_id: planId,
            paymentMethod,
        });
    };

    return (
        <AuthenticatedLayout
            user={auth.user}
            header={
                <h2 className="font-semibold text-xl text-gray-800 leading-tight">
                    Plans
                </h2>
            }
        >
            <Head title="Plans" />
            <div>
                <h1>Plans</h1>
                <Button>Click me</Button>
                <ul>
                    {plans.map((plan) => (
                        <li key={plan.id}>
                            <h2>{plan.name}</h2>
                            <p>Price: ${plan.price}</p>
                            <button onClick={() => handleSubscribe(plan.id)}>
                                Subscribe
                            </button>
                        </li>
                    ))}
                </ul>
            </div>
        </AuthenticatedLayout>
    );
};

export default Plans;
