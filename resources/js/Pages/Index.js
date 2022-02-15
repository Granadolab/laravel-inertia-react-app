import React, {Fragment} from 'react';
import { Link } from '@inertiajs/inertia-react';
import { Layout } from '../Components/Layout';
import Table from '../Components/Table';

const  Index = ({data}) => {

  return (
    <Fragment>
        <Layout>

            <div className=" flex flex-row  w-full">
                <button className="bg-transparent rounded-full hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent">
                    <Link href="/games/create" method='get'>Add</Link>
                </button>
            </div>
            <Table info={data}/>
        </Layout>
    </Fragment>
  );
}

export default Index;
