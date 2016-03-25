<?php namespace App\Repositories;

use Illuminate\Contracts\Container\Container;

/**
 * Class Repository
 */
abstract class Repository implements RepositoryInterface {

    /**
     * @var App
     */
    private $app;

    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;

    /**
     * Constructor for Repository
     *
     * @param Container $app
     */
    public function __construct(Container $app)
    {
        $this->app = $app;
        $this->makeModel();
    }

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public abstract function model();

    /**
     * @param array $columns
     * @return mixed
     */
    public function all($columns = array('*'))
    {
        return $this->model->get($columns);
    }

    /**
     * @param  string $value
     * @param  string $key
     * @return array
     */
    public function lists($value, $key = null)
    {
        return $this->model->lists($value, $key);
    }

    /**
     * @param int $perPage
     * @param array $columns
     * @return mixed
     */
    public function paginate($perPage = 1, $columns = array('*'))
    {
        return $this->model->paginate($perPage, $columns);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        $this->model = $this->model->create($data);

        return $this->model;
    }

    /**
     * @param array $data
     * @param $id
     * @return bool
     */
    public function update(array $data, $id)
    {
        // Find this record by ID
        $this->model = $this->find($id);

        return $this->model->update($data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    /**
     * @param $id
     * @param array $columns
     * @return mixed
     */
    public function find($id, $columns = array('*'))
    {
        // Find this record
        $model = $this->model->find($id, $columns);

        // If we have one, override this local model
        if ($model != null)
        {
            $this->model = $model;
        }

        return $model;
    }

    /**
     * @param $attribute
     * @param $value
     * @param array $columns
     * @return mixed
     */
    public function findBy($attribute, $value, $columns = array('*'))
    {
        // Find this record
        $model = $this->model->where($attribute, '=', $value)->first($columns);

        // If we have one, override this local model
        if ($model != null)
        {
            $this->model = $model;
        }

        return $model;
    }

    /**
     * @param $attribute
     * @param $value
     * @param array $columns
     * @return mixed
     */
    public function findAllBy($attribute, $value, $columns = array('*'))
    {
        return $this->model->where($attribute, '=', $value)->get($columns);
    }

    /**
     * @param array $where
     * @param array $columns
     * @return mixed
     */
    public function findWhere($where, $columns = array('*'))
    {

        foreach ($where as $field => $value)
        {
            if (is_array($value))
            {
                list($field, $condition, $value) = $value;
                $this->model->where($field, $condition, $value);
            } else
            {
                $this->model->where($field, '=', $value);
            }
        }

        return $this->model->get($columns);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder
     * @throws RepositoryException
     */
    public function makeModel()
    {
        $this->model = $this->app->make($this->model());

        return $this->model;
    }

}