export class SubAdmin {
    id:number;
    username:string;
    security_code:string;
    password:string;
    email?:string;
    profile_image?:ByteString;
    online_status?:boolean;
    is_suspended?:boolean;
    is_deleted?:boolean;
    created_by?:string;
    created_at?:Date;
    modified_by?:string;
    modified_at?:Date;
    permissions:Permissions
}

export class Permissions {
    id:number;
    admin_user_id:number;
    as_admin:boolean;
    manage_sub_admin:boolean;
    manage_member:boolean;
    manage_carousel:boolean;
    audit:boolean;
    chat:boolean;
    view_errors:boolean;
    statistic:boolean;
    account_alarm:boolean;
    created_at?:Date    
}
    