import React, {Fragment} from 'react';
import { Head } from '@inertiajs/inertia-react';
import { usePage } from '@inertiajs/inertia-react';


export const Layout = ({children}) => {

    const { flash } = usePage().props;
  return (
   <Fragment>
        <Head>
            <title>Test Evaluation</title>
            <meta name="description" content="Test Evaluation" />
        </Head>
        <div className='m-20'>
            <div className="flex flex-row justify-center p-10">
                <div>
                        {flash.message && (
                        <div class="alert">{flash.message}</div>
                        )}

                </div>
                    <div className="font-bold rounded-lg border shadow-lg py-10 px-5">
                        {children}
                    </div>
                </div>
        </div>
   </Fragment>
  )
}
