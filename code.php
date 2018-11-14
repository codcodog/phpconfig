<?php
/**
 * @Author Cryven
 * @Date   2018-10-23 15:19:56
 */

/**
 * API 接口状态码定义
 *
 * 主要定义为以下几种类型：
 * 1. 客户端-非法参数
 * 2. 服务端-数据为空
 * 3. （业务）操作失败
 * 4. 权限（文件，登录等）
 * 5. 成功/失败
 */
class Code
{
    /** 成功&失败 **/
    const SUCCESS = 0;
    const FAILED  = 1;

    /** 非法参数 1001~1999 **/
    const PARAM_INVALID = 1001;

    /** 数据为空 **/
    const DATA_NOT_FOUND = 2001;

    /** 操作失败 **/
    const OPERATION_FAILED = 3001;

    /** 权限不足 **/
    const PERMISSION_NOT_ALLOWED = 4001;
}
