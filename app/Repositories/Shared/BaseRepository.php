<?php

namespace App\Repositories\Shared;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements BaseRepositoryInterface
{
    public function __construct(protected Model $model) {}

    public function all(): Collection
    {
        return $this->model->query()->get();
    }

    public function find(?int $id): ?Model
    {
        return $this->model->find($id);
    }

    public function create(array $data): Model
    {
        return $this->model->create($data);
    }

    public function update(int $id, array $data): Model
    {
        $this->model->where('id', $id)->update($data);
        return $this->model->find($id);
    }

    public function delete(int $id): void
    {
        $this->model->destroy($id);
    }
}
