<?php namespace App\Module\Quran\Services;

use Illuminate\Database\Eloquent\Model;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;
use League\Fractal\TransformerAbstract;

class Transformer
{
    /**
     * @param Model|\Illuminate\Support\Collection|Array $data
     * @param callable|TransformerAbstract $transformer
     * @return \League\Fractal\Scope
     */
    public function transform($data, $transformer)
        {
            $fractal = new Manager();
            $resource = null;
            if ($data instanceof Model) {
                $resource = new Item($data, $transformer);
            } else {
                $resource = new Collection($data,$transformer);
            }

            return $fractal->createData($resource);
        }
}
