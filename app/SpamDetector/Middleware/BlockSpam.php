<?php

namespace App\SpamDetector\Middleware;

use App\SpamDetector\SpamDetectorManager;
use Closure;
use Illuminate\Http\Request;

class BlockSpam
{
    protected $spamDetectorManager;

    /**
     * BlockSpam constructor.
     *
     * @param $spamDetectorManager
     */
    public function __construct(SpamDetectorManager $spamDetectorManager)
    {
        $this->spamDetectorManager = $spamDetectorManager;
    }

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($this->spamDetectorManager->detect()) {
            abort(422, 'Spam Detected.');
        }

        return $next($request);
    }
}
