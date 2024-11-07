<?php

namespace App\Repositories\Contracts;

interface WorkshopRepositoryInterface
{
    /**
     * Get all new workshops.
     *
     * @return mixed
     */
    public function getAllNewWorkshops();

    /**
     * Find a workshop by its ID.
     *
     * @param int $id
     * @return mixed
     */
    public function find($id);

    /**
     * Get the price of a workshop.
     *
     * @param int $workshopId
     * @return mixed
     */
    public function getPrice($workshopId);
}
