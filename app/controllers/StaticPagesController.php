<?php
class StaticPagesController extends ApplicationController
{
    public function start()
    {
        $catalog_name = $this->params['catalog'] ?? Catalog::default() ?? '';
        $catalog = new Catalog($catalog_name);

        return $this->render([ 'catalog' => $catalog ]);
    }
}
