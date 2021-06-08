<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cores Model
 *
 * @method \App\Model\Entity\Core newEmptyEntity()
 * @method \App\Model\Entity\Core newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Core[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Core get($primaryKey, $options = [])
 * @method \App\Model\Entity\Core findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Core patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Core[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Core|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Core saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Core[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Core[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Core[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Core[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CoresTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('cores');
        $this->setDisplayField('idCor');
        $this->setPrimaryKey('idCor');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('idCor')
            ->allowEmptyString('idCor', null, 'create');

        $validator
            ->scalar('nomeCor')
            ->maxLength('nomeCor', 8)
            ->requirePresence('nomeCor', 'create')
            ->notEmptyString('nomeCor');

        return $validator;
    }
}
