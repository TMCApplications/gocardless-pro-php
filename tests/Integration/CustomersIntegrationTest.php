<?php
//
// WARNING: Do not edit by hand, this file was generated by Crank:
// https://github.com/gocardless/crank
//

namespace GoCardlessPro\Integration;

class CustomersIntegrationTest extends IntegrationTestBase
{
    public function testResourceModelExists()
    {
        $obj = new \GoCardlessPro\Resources\Customer(array());
        $this->assertNotNull($obj);
    }
    
    public function testCustomersCreate()
    {
        $fixture = $this->load_fixture('customers')->create;
        $this->stub_request($fixture);

        $service = $this->client->customers();
        $response = call_user_func_array(array($service, 'create'), (array)$fixture->url_params);

        $body = $fixture->body->customers;
    
        $this->assertInstanceOf('\GoCardlessPro\Resources\Customer', $response);

        $this->assertEquals($body->address_line1, $response->address_line1);
        $this->assertEquals($body->address_line2, $response->address_line2);
        $this->assertEquals($body->address_line3, $response->address_line3);
        $this->assertEquals($body->city, $response->city);
        $this->assertEquals($body->company_name, $response->company_name);
        $this->assertEquals($body->country_code, $response->country_code);
        $this->assertEquals($body->created_at, $response->created_at);
        $this->assertEquals($body->email, $response->email);
        $this->assertEquals($body->family_name, $response->family_name);
        $this->assertEquals($body->given_name, $response->given_name);
        $this->assertEquals($body->id, $response->id);
        $this->assertEquals($body->language, $response->language);
        $this->assertEquals($body->metadata, $response->metadata);
        $this->assertEquals($body->postal_code, $response->postal_code);
        $this->assertEquals($body->region, $response->region);
        $this->assertEquals($body->swedish_identity_number, $response->swedish_identity_number);
    
    }
    
    public function testCustomersList()
    {
        $fixture = $this->load_fixture('customers')->list;
        $this->stub_request($fixture);

        $service = $this->client->customers();
        $response = call_user_func_array(array($service, 'list'), (array)$fixture->url_params);

        $body = $fixture->body->customers;
    
        $records = $response->records;
        $this->assertInstanceOf('\GoCardlessPro\Core\ListResponse', $response);
        $this->assertInstanceOf('\GoCardlessPro\Resources\Customer', $records[0]);

        $this->assertEquals($fixture->body->meta->cursors->before, $response->before);
        $this->assertEquals($fixture->body->meta->cursors->after, $response->after);
    

    
        foreach (range(0, count($body) - 1) as $num) {
            $record = $records[$num];
            $this->assertEquals($body[$num]->address_line1, $record->address_line1);
            $this->assertEquals($body[$num]->address_line2, $record->address_line2);
            $this->assertEquals($body[$num]->address_line3, $record->address_line3);
            $this->assertEquals($body[$num]->city, $record->city);
            $this->assertEquals($body[$num]->company_name, $record->company_name);
            $this->assertEquals($body[$num]->country_code, $record->country_code);
            $this->assertEquals($body[$num]->created_at, $record->created_at);
            $this->assertEquals($body[$num]->email, $record->email);
            $this->assertEquals($body[$num]->family_name, $record->family_name);
            $this->assertEquals($body[$num]->given_name, $record->given_name);
            $this->assertEquals($body[$num]->id, $record->id);
            $this->assertEquals($body[$num]->language, $record->language);
            $this->assertEquals($body[$num]->metadata, $record->metadata);
            $this->assertEquals($body[$num]->postal_code, $record->postal_code);
            $this->assertEquals($body[$num]->region, $record->region);
            $this->assertEquals($body[$num]->swedish_identity_number, $record->swedish_identity_number);
            
        }
    }
    
    public function testCustomersGet()
    {
        $fixture = $this->load_fixture('customers')->get;
        $this->stub_request($fixture);

        $service = $this->client->customers();
        $response = call_user_func_array(array($service, 'get'), (array)$fixture->url_params);

        $body = $fixture->body->customers;
    
        $this->assertInstanceOf('\GoCardlessPro\Resources\Customer', $response);

        $this->assertEquals($body->address_line1, $response->address_line1);
        $this->assertEquals($body->address_line2, $response->address_line2);
        $this->assertEquals($body->address_line3, $response->address_line3);
        $this->assertEquals($body->city, $response->city);
        $this->assertEquals($body->company_name, $response->company_name);
        $this->assertEquals($body->country_code, $response->country_code);
        $this->assertEquals($body->created_at, $response->created_at);
        $this->assertEquals($body->email, $response->email);
        $this->assertEquals($body->family_name, $response->family_name);
        $this->assertEquals($body->given_name, $response->given_name);
        $this->assertEquals($body->id, $response->id);
        $this->assertEquals($body->language, $response->language);
        $this->assertEquals($body->metadata, $response->metadata);
        $this->assertEquals($body->postal_code, $response->postal_code);
        $this->assertEquals($body->region, $response->region);
        $this->assertEquals($body->swedish_identity_number, $response->swedish_identity_number);
    
    }
    
    public function testCustomersUpdate()
    {
        $fixture = $this->load_fixture('customers')->update;
        $this->stub_request($fixture);

        $service = $this->client->customers();
        $response = call_user_func_array(array($service, 'update'), (array)$fixture->url_params);

        $body = $fixture->body->customers;
    
        $this->assertInstanceOf('\GoCardlessPro\Resources\Customer', $response);

        $this->assertEquals($body->address_line1, $response->address_line1);
        $this->assertEquals($body->address_line2, $response->address_line2);
        $this->assertEquals($body->address_line3, $response->address_line3);
        $this->assertEquals($body->city, $response->city);
        $this->assertEquals($body->company_name, $response->company_name);
        $this->assertEquals($body->country_code, $response->country_code);
        $this->assertEquals($body->created_at, $response->created_at);
        $this->assertEquals($body->email, $response->email);
        $this->assertEquals($body->family_name, $response->family_name);
        $this->assertEquals($body->given_name, $response->given_name);
        $this->assertEquals($body->id, $response->id);
        $this->assertEquals($body->language, $response->language);
        $this->assertEquals($body->metadata, $response->metadata);
        $this->assertEquals($body->postal_code, $response->postal_code);
        $this->assertEquals($body->region, $response->region);
        $this->assertEquals($body->swedish_identity_number, $response->swedish_identity_number);
    
    }
    
}
