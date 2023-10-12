<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        if (session()->get('log') !== true) {
            if ($request->uri->getSegment(1) === 'lokasi' || $request->uri->getSegment(1) === 'Lokasi') {
                // Pengguna mencoba mengakses controller Lokasi tanpa login
                return redirect()->to(base_url('home'));
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
        // Tidak ada logika tambahan yang diperlukan pada metode after
    }
}
