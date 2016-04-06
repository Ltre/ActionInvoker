<?php
/**
 * @author Oriki
 * 数据库专用的基础实体
 * 由于get_class_vars()和get_object_vars()只能在类外取得public的属性，
 * 因此，为确保获得属性全部，所有与数据表字段对应的属性均应设置为public
 */
class BaseEntity {
	/*
	 * 默认主键为id。类型必须要与数据表的对应。
	 * 要么是int，要么是string
	 */
	public $id;
	
}