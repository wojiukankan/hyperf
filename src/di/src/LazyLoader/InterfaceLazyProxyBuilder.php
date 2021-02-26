<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace Hyperf\Di\LazyLoader;

class InterfaceLazyProxyBuilder extends AbstractLazyProxyBuilder
{
    public function addClassRelationship(): AbstractLazyProxyBuilder
    {
        if (strpos($this->originalClassName, '\\') !== 0) {
            $originalClassName = '\\' . $this->originalClassName;
        } else {
            $originalClassName = $this->originalClassName;
        }
        $this->builder = $this->builder->implement($originalClassName);
        return $this;
    }
}
