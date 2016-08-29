<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Elasticquent\ElasticquentTrait;

class Resource extends Model
{
    use ElasticquentTrait;


    // Campos que permitirão Mass Assignment 
    protected $fillable = [
        "name",
        "technicalDescription",
        "informalDescription",
        "uriResources",
        "user_id"
    ];

    /**
     * The elasticsearch settings.
     *
     * @var array
     */
    protected $indexSettings = [
        'analysis' => [
            'char_filter' => [
                'replace' => [
                    'type' => 'mapping',
                    'mappings' => [
                        '&=> and '
                    ],
                ],
            ],
            'filter' => [
                'word_delimiter' => [
                    'type' => 'word_delimiter',
                    'split_on_numerics' => false,
                    'split_on_case_change' => true,
                    'generate_word_parts' => true,
                    'generate_number_parts' => true,
                    'catenate_all' => true,
                    'preserve_original' => true,
                    'catenate_numbers' => true,
                ]
            ],
            'analyzer' => [
                'default' => [
                    'type' => 'custom',
                    'char_filter' => [
                        'html_strip',
                        'replace',
                    ],
                    'tokenizer' => 'whitespace',
                    'filter' => [
                        'lowercase',
                        'word_delimiter',
                    ],
                ],
            ],
        ],
    ];

    protected $mappingProperties = array(
        'technicalDescription' => array(
            'type' => 'string',
            'analyzer' => 'standard'
        )
    );
    
    // Promover o relacionamento (Resource -> Category)
    public function categories()
    {
        // Resource possui várias categorias
        return $this->belongsToMany('App\Category', 'resources_categories');
    }

    // Promover o relacionamento (Resource -> User)
    public function user()
    {
        // Resource possui 1 usuário
        return $this->belongsTo('App\User');
    }

}
