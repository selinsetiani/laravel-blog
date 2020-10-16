<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use App\Exceptions\CustomException;
use Throwable;

use Illuminate\Support\Facades\Log;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        if($this->isHttpException($exception))
        {
            
            Log::debug("Exception ocurred", ["e" => $exception, "r" => $request]);
            switch ($exception->getStatusCode()) 
                {
                // not found
                case 404:
                return redirect()->route('notfound');
                break;
    
                // internal error
                case '500':
                return redirect()->route('notfound');
                break;

                //not authorised
                case '400':
                return redirect()->route('notfound');
                break;
                default:
                    return $this->renderHttpException($exception);
                break;
            }
        }
        else
        {
                return parent::render($request, $exception);
        }
    }
}
