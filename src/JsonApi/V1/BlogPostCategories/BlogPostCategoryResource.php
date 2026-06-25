<?php

declare(strict_types=1);

namespace Misaf\VendraBlogApi\JsonApi\V1\BlogPostCategories;

use LaravelJsonApi\Core\Resources\JsonApiResource;

final class BlogPostCategoryResource extends JsonApiResource
{
    public function attributes($request): iterable
    {
        return [
            'name'        => $this->name,
            'description' => $this->description,
            'slug'        => $this->slug,
            'position'    => $this->position,
            'status'      => $this->status,
            'created_at'  => $this->created_at,
            'updated_at'  => $this->updated_at,
        ];
    }

    public function relationships($request): iterable
    {
        return [
            $this->relation('blogPosts'),
            $this->relation('multimedia'),
        ];
    }
}
