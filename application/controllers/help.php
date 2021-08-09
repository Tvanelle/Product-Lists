<?php $user = $this->ion_auth->user()->row();
		echo $user->email; ?>
         for ($i=1; $i < $countData+1 ; $i++) { 
                $img= $this->input->post('image'.$i);
                var_dump($this->input->post());
                $imgData= array(
                    'img'=>$img,
                    'codeBarProd'=>$codeBarProd
                );
              $this->load->model('insertData');
              $this->insertData->addImg($imgData);
            }
            
            for ($i=1; $i < $countDataVid+1 ; $i++) {
                $video= $this->input->post('video'.$i);
                echo $video;
                $videoData = array(
                    'video'=> $video,
                    'codeBarProd'=>$codeBarProd
                );
                var_dump($videoData);
                 $this->load->model('insertData');
                 $this->insertData->addVideo($videoData);
            }
            
            for ($i=2; $i < $countDataUrl+1 ; $i++) {
               
                $url= $this->input->post('url'.$i);
                echo $url;
                $urlData= array(
                    'url'=>$url,
                    'codeBarProd'=>$codeBarProd
                );
                 $this->load->model('insertData');
                 $this->insertData->addUrl($urlData);
            }
        
            
            for ($i=1; $i < $countDataAddress+1 ; $i++) {
               
                $adressePtVte= $this->input->post('adressePtVte'.$i);
                echo $adressePtVte;
                $data= array(
                    'adressePtVte'=>$adressePtVte,
                    'codeBarProd'=>$codeBarProd
                );
                 $this->load->model('insertData');
                 $this->insertData->addPaysPtVte($data);
            }