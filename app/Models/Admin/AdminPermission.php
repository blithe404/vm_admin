<?php

namespace App\Models\Admin;

use App\Models\VmAdminModel;
use Illuminate\Database\Eloquent\Model;

class AdminPermission extends Model
{
    use VmAdminModel;

    protected $table='admin_permissions';

    public function roles()
    {
        return $this->belongsToMany(AdminRole::class,'admin_permission_role','permission_id','role_id');
    }

}
