<?php

namespace App\Policies;

use App\Models\Curso;
use App\Models\User;
use Illuminate\Auth\Access\Response;

use \App\Http\Controllers\PermissionController;

class CursoPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return PermissionController::isAuthorized('cursos.index');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Curso $curso): bool
    {
        return PermissionController::isAuthorized('cursos.show');
    }

    public function viewDiscents(User $user): bool
    {
        return PermissionController::isAuthorized('cursos.alunos');
    }

    public function viewClasses(User $user): bool
    {
        return PermissionController::isAuthorized('cursos.disciplinas');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return PermissionController::isAuthorized('cursos.create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Curso $curso): bool
    {
        return PermissionController::isAuthorized('cursos.edit');

    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Curso $curso): bool
    {
        return PermissionController::isAuthorized('cursos.delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Curso $curso): bool
    {
        return PermissionController::isAuthorized('cursos.delete');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $Curso, Aluno $curso): bool
    {
        return PermissionController::isAuthorized('cursos.delete');
    }
}
