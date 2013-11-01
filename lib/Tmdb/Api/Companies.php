<?php
/**
 * This file is part of the Tmdb PHP API created by Michael Roterman.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Tmdb
 * @author Michael Roterman <michael@wtfz.net>
 * @copyright (c) 2013, Michael Roterman
 * @version 0.0.1
 */
namespace Tmdb\Api;

class Companies
    extends AbstractApi
{
    /**
     * This method is used to retrieve all of the basic information about a company.
     *
     * @param $company_id
     * @param array $options
     * @return mixed
     */
    public function getCompany($company_id, array $options = array())
    {
        return $this->get('company/' . $company_id, $options);
    }

    /**
     * Get the list of movies associated with a particular company.
     *
     * @param $company_id
     * @param array $options
     * @return mixed
     */
    public function getMovies($company_id, array $options = array())
    {
        return $this->get('company/' . $company_id . '/movies', $options);
    }
}